<?php

namespace App\Http\Resources\HumanResource\Kpi\KpiTemplate;

use App\Http\Resources\HumanResource\Kpi\KpiTemplateGroup\KpiTemplateGroupCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class KpiTemplateResource extends JsonResource
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
            'weight' => $this->weight,
            'target' => $this->target,
            'groups' => new KpiTemplateGroupCollection($this->groups),
        ];
    }
}
