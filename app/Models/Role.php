<?php

  namespace App\Models;

  use Database\Factories\RoleFactory;
  use Illuminate\Database\Eloquent\Concerns\HasUuids;
  use Illuminate\Database\Eloquent\Factories\HasFactory;
  use Illuminate\Database\Eloquent\Model;
  use Illuminate\Database\Eloquent\Relations\HasMany;

  class Role extends Model
  {
    /** @use HasFactory<RoleFactory> */
    use HasFactory, HasUuids;

    protected $fillable = ['name'];

    /**
     * Get the users associated with the role.
     *
     * @return HasMany
     */
    public function users(): HasMany
    {
      return $this->hasMany(User::class);
    }
  }
