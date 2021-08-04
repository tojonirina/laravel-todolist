<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{
    public $table = 'items';
    public $timestamps = false;


    public function getId(): int {
        return $this->attributes['id'];
    }

    public function setItem(string $item): void {
        $this->attributes['item'] = $item;
    }

    public function getItem(): string {
        return $this->attributes['item'];
    }

    public function setStatus(string $status): void {
        $this->attributes['status'] = $status;
    }

    public function getStatus(): string {
        return $this->attributes['status'];
    }

    public function setCreatedAt($createAt) {
        $this->attributes['created_at'] = $createAt;
    }

    public function getCreatedAt(): string {
        return $this->attributes['created_at'];
    }

}
