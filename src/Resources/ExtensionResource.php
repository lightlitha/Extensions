<?php

namespace Faceless\Extensions\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExtensionResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'price' => $this->price,
      'summary' => $this->summary,
      'description' => $this->description,
      'minimum_requirements' => $this->minimum_requirements,
      'recommendations' => $this->recommendations,
      'extension_type' => array_map(
        function($type) {
          return $type['name'];
        },
        $this->extension_type->toArray()
      ),
      'subscription_type' => $this->subscription_type->name
    ];
  }
}
