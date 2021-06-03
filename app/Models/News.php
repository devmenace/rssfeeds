<?php

namespace App\Models;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model implements Feedable
{
    use HasFactory;

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->updated_at)
            ->link($this->link)
            ->author($this->author);
    }

    public static function getFeedItems()
    {
        return static::all();
    }

    public function getLinkAttribute()
    {
        return route('news.show', $this);
    }
}
