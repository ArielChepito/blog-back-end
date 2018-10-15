<?php

namespace App\Repositories;

use App\Models\post;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class postRepository
 * @package App\Repositories
 * @version October 13, 2018, 10:26 pm UTC
 *
 * @method post findWithoutFail($id, $columns = ['*'])
 * @method post find($id, $columns = ['*'])
 * @method post first($columns = ['*'])
*/
class postRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'photo',
        'photo_url',
        'category'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return post::class;
    }
}
