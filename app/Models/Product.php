<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *   schema="Product",
 *   type="object",
 *   title="Product",
 *   required={"name","description","price","stock"},
 *   @OA\Property(property="name", type="string"),
 *   @OA\Property(property="description", type="string"),
 *   @OA\Property(property="price", type="number"),
 *   @OA\Property(property="stock", type="integer"),
 * )
 */
class Product extends Model
{
    use HasFactory;
}
