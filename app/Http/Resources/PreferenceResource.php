<?php

namespace App\Http\Resources;

use App\Models\Preference;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Preference
 */
class PreferenceResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'source' => $this->source,
            'category' => $this->category,
            'author' => $this->author,
            'user' => new UserResource($this->user),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
