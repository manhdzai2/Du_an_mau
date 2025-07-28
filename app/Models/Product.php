<?php

namespace App\Models;

use App\Model;

class Product extends Model
{
    public function getAll()
    {
        $stmt = $this->connection->createQueryBuilder();
        $stmt->select('p.*','c.name as category_name')
            ->from('products','p')
            ->innerJoin('p','categories','c','c.id = p.category_id')
            ->orderBy('p.id','desc');
        return $stmt->fetchAllAssociative();
    }
     public function findById($id)
    {
        $stmt = $this->connection->createQueryBuilder();
        $stmt->select('p.*','c.name as category_name')
            ->from('products','p')
            ->innerJoin('p','categories','c','c.id = p.category_id')
            ->where('p.id = :id');
        $stmt->setParameter('id',$id);
        return $stmt->fetchAssociative();
    }
    // them
    public function insert($data)
    {
        return $this->connection->insert('products',[
            'name' => $data['name'],
            'price' => $data['price'],
            'category_id' => $data['category_id'],
            'date_entry' => $data['date_entry'],
            'status' => $data['status'],
            'image_cover' => $data['image_cover'],
        ]);
    }
    // sua
    public function update($id,$data)
    {
        return $this->connection->insert('products',[
            'name' => $data['name'],
            'price' => $data['price'],
            'category_id' => $data['category_id'],
            'date_entry' => $data['date_entry'],
            'status' => $data['status'],
            'image_cover' => $data['image_cover'],
        ],['id' => $id]);
    }
    // xoa
    public function delete($id)
    {
        return $this->connection->delete('products',['id'=>$id]);
    }
}