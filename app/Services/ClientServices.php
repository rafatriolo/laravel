<?php

namespace TesteLaravel\Services;


use Prettus\Validator\Exceptions\ValidatorException;
use TesteLaravel\Repositories\ClientRepository;
use TesteLaravel\Validators\ClientValidators;

class ClientServices
{
    /**
     * @var ClientRepository
     */

    protected $repository;

    /**
     * @var ClientValidators
     */
    protected $validator;
    public function __construct(ClientRepository $repository , ClientValidators $validator){
        $this->repository = $repository;
        $this->validator = $validator;
    }
    public function create(array $data){
       try{
           $this->validator->with($data)->passesOrFail();
           return $this->repository->create($data);
       } catch (ValidatorException $e){
           return[
               'error' => true,
               'message' => $e->getMessageBag()
           ];
       }
    }
    public function update(array $data, $id){
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        }catch (ValidatorException $e){
            return[
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }

    }
}
