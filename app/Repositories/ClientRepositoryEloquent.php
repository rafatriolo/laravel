<?php 

namespace TesteLaravel\Repositories;
use Prettus\Repository\Eloquent\BaseRepository;
use TesteLaravel\Models\Client;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository{

	/**
	 * @return mixed
     */
	public function model(){
		return Client::class;
	}

}