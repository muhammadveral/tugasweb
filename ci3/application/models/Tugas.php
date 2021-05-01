<?php
    class Tugas extends CI_Model
    {
        public function get_data()
        {
            $barang = array(
                array('Gula','Rp.12000',50)
                ,array('Gula Merah','Rp.12500',30)
                ,array('Telur','Rp.25000',10)
                ,array('Bawang','Rp.12000',50)
            );
            return $barang;
        }
    }