<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'places';
    protected $connection = 'mysql-remote';
    protected $fillable = [
        'slug',
        'airport_id',
        'category_id',
        '_id',
        'name',
        'latitude',
        'longitude',
        'distance_text',
        'distance_value',
        'all_travel_mode_distance',
        'google_place_id',
        'dup_google_place_id',
        'google_latitude',
        'google_longitude',
        'google_rating',
        'google_formatted_address',
        'data',
        'google_data',
        'expire_at',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function airport()
    {
        return $this->belongsTo(Airport::class);
    }

    protected $appends = ['bio_image', 'bio_reviews_data', 'bio_week_days', 'bio_current_image', 'bio_near_by_places'];

    public function getBioImageAttribute()
    {

        $googleData = json_decode($this->google_data, true);
        $photoUrls = [];

        if (!is_null($googleData) && isset($googleData['photos'])) {
            foreach ($googleData['photos'] as $photo) {
                if (isset($photo['photo_url'])) {
                    $photoUrls[] = $photo['photo_url'];
                }
            }
        }
        return  $photoUrls;
    }
    public function getBioReviewsDataAttribute()
    {
        $googleData = json_decode($this->google_data, true);
        $reviewsData = [];
        if (!is_null($googleData) && isset($googleData['reviews'])) {
            $reviewsData[] = $googleData['reviews'];
            return $reviewsData;
        }
    }

    public function getBioWeekDaysAttribute()
    {
        $googleData = json_decode($this->google_data, true);
        $weekData = [];
        if (!is_null($googleData) && isset($googleData['opening_hours']['weekday_text'])) {
            $weekData[] = $googleData['opening_hours']['weekday_text'];
            return $weekData;
        }
    }

    public function getBioCurrentImageAttribute()
    {
        $googleData = json_decode($this->google_data, true);
        $photoUrl = null;
        if (!is_null($googleData) && isset($googleData['photos'][0]['photo_url'])) {
            $photoUrl = $googleData['photos'][0]['photo_url'];
        }
        return $photoUrl;
    }

    public function getBioNearByPlacesAttribute()
    {
        return self::query()
            ->where('id', '<>', $this->id)
            ->where('airport_id', $this->airport_id)
            ->where('category_id', $this->category_id)
            ->whereNotNull('distance_value')
            ->orderBy('distance_value', 'ASC')
            ->limit(5)
            ->pluck('name', 'slug');
    }
}
