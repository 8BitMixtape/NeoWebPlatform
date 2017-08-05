<?php

namespace App\Repositories;

use App\Models\Mixtape;
use App\Models\User;


class MixtapeRepository extends BaseRepository
{
    /**
     * The Tag instance.
     *
     * @var \App\Models\Tag
     */
    protected $tag;

    /**
     * The Comment instance.
     *
     * @var \App\Models\Comment
     */
    protected $comment;

    /**
     * Create a new MixtapeRepository instance.
     *
     * @param  \App\Models\Mixtape $mixtape
     * @return void
     */
    public function __construct(Mixtape $mixtape)
    {
        $this->model = $mixtape;
    }

    /**
     * Create or update a post.
     *
     * @param  \App\Models\Mixtape $post
     * @param  array  $inputs
     * @param  integer  $user_id
     * @return \App\Models\Post
     */
    protected function saveMixtape($post, $inputs, $user_id = null, $hex_string = null)
    {
        $post->name = $inputs['name'];
        $post->description = $inputs['description'];
        $post->variant = $inputs['variant'];
        $post->url = $inputs['url'];
        
        if ($hex_string)
        {
            $post->hex = $hex_string;
        }

        if ($user_id) {
            $post->user_id = $user_id;
        }        
        $post->save();

        return $post;
    }

    /**
     * Create a query for Mixtape.
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    protected function queryActiveWithUserOrderByDate()
    {
        return $this->model
            ->select('id', 'created_at', 'updated_at','user_id', 'name', 'description', 'variant', 'hex', 'url')
            ->with('user')
            ->latest();
    }

    /**
     * Get Mixtape collection.
     *
     * @param  int  $n
     * @return Illuminate\Support\Collection
     */
    public function getActiveWithUserOrderByDate($n)
    {
        return $this->queryActiveWithUserOrderByDate()->paginate($n);
    }

    /**
     * Get Mixtape collection with tag.
     *
     * @param  int  $n
     * @param  int  $id
     * @return Illuminate\Support\Collection
     */
    public function getActiveWithUserOrderByDateForTag($n, $id)
    {
        return $this->queryActiveWithUserOrderByDate()
            ->whereHas('tags', function ($q) use ($id) {
                $q->where('tags.id', $id);
            })->paginate($n);
    }

    /**
     * Get search collection.
     *
     * @param  int  $n
     * @param  string  $search
     * @return Illuminate\Support\Collection
     */
    public function search($n, $search)
    {
        return $this->queryActiveWithUserOrderByDate()
            ->where(function ($q) use ($search) {
                $q->where('summary', 'like', "%$search%")
                    ->orWhere('content', 'like', "%$search%")
                    ->orWhere('title', 'like', "%$search%");
            })->paginate($n);
    }

    /**
     * Get post collection.
     *
     * @param  int     $n
     * @param  int     $user_id
     * @param  string  $orderby
     * @param  string  $direction
     * @return Illuminate\Support\Collection
     */
    public function getMixtapesWithOrder($n, $user_id = null, $orderby = 'mixtapes.created_at', $direction = 'desc')
    {
        $query = $this->model
            ->select('mixtapes.id', 'mixtapes.created_at','mixtapes.user_id', 'mixtapes.updated_at', 'mixtapes.name', 'mixtapes.description', 'mixtapes.variant', 'mixtapes.hex', 'mixtapes.url')
            ->join('users', 'users.id', '=', 'mixtapes.user_id')
            ->orderBy($orderby, $direction);
        
        if ($user_id) {
            $query->where('user_id', $user_id);
        }

        return $query->paginate($n);
    }

    /**
     * Get post collection with post slug.
     *
     * @param  string  $slug
     * @return array
     */
    public function getMixtapeBySlug($slug)
    {
        $post = $this->model->with('user', 'tags')->whereSlug($slug)->firstOrFail();

        $comments = $this->comment
            ->wherePostId($post->id)
            ->with('user')
            ->whereHas('user', function ($q) {
                $q->whereValid(true);
            })
            ->get();

        return compact('post', 'comments');
    }

    /**
     * Get post collection.
     *
     * @param  \App\Models\Post $post
     * @return array
     */
    public function getMixtapeWithTags($post)
    {
        $tags = [];

        foreach ($post->tags as $tag) {
            array_push($tags, $tag->tag);
        }

        return compact('post', 'tags');
    }

    /**
     * Get post collection.
     *
     * @param  int  $id
     * @return array
     */
    public function getByIdWithTags($id)
    {
        return $this->model->with('tags')->findOrFail($id);
    }

    /**
     * Update a post.
     *
     * @param  array  $inputs
     * @param  \App\Models\Post $post
     * @return void
     */
    public function update($inputs, $post)
    {
        $post = $this->savePost($post, $inputs);

        // Tag gestion
        $tags_id = [];
        if (array_key_exists('tags', $inputs) && $inputs['tags'] != '') {
            $tags = explode(',', $inputs['tags']);

            foreach ($tags as $tag) {
                $tag_ref = $this->tag->whereTag($tag)->first();
                if (is_null($tag_ref)) {
                    $tag_ref = new $this->tag();
                    $tag_ref->tag = $tag;
                    $tag_ref->save();
                }
                array_push($tags_id, $tag_ref->id);
            }
        }

        $post->tags()->sync($tags_id);
    }


    /**
     * Create a post.
     *
     * @param  array  $inputs
     * @param  int    $user_id
     * @return void
     */
    public function store($inputs, $user_id, $hex_string = null)
    {
        $post = $this->saveMixtape(new $this->model, $inputs, $user_id, $hex_string);

        // Maybe purge orphan tags...
    }

    /**
     * Destroy a post.
     *
     * @param  \App\Models\Post $post
     * @return void
     */
    public function destroy($post)
    {
        // $post->tags()->detach();
        $post->delete();
    }

    /**
     * Get tag name by id.
     *
     * @param  int  $tag_id
     * @return string
     */
    public function getTagById($tag_id)
    {
        return $this->tag->findOrFail($tag_id)->tag;
    }
}
