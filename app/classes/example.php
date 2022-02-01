<?php


namespace App\classes;


class example
{
   /* public $student = [];
    public function index()
    {
       $this->student = [10, 20, 'BITM', 10.20, true, false];
     /*  echo $this->student[5];*/
      /* foreach ($this->student as $key=> $student)
       {
           echo 'index no' .$key. 'value' .$student. '<br/>';
       }*/
//        public $student = [];
//        public function index()
//    {
//        $this->student = [
//            0=>[
//            'name'=>'salah',
//            'email' => 'jahid@gmail.com',
//            'phone' => '12345678',
//         ],
//         1=>[
//            'name'=>'jahid',
//            'email' => 'jahid@gmail.com',
//            'phone' => '12345678',
//          ],
//        ];
//        foreach ($this->student as $key => $item)
//        {
//            echo $item['name'].$item['email'].$item['phone'].'<br/>';
//        }

//    public $student = [];
//    public function index()
//    {
//        $this->student = [
//            0=>[
//            'name'=>'salah',
//            'email' => 'jahid@gmail.com',
//            'phone' => [
//               'phone1' => '12345678',
//               'phone2' => '56923456829',
//               ],
//         ],
//         1=>[
//            'name'=>'jahid',
//            'email' => 'jahid@gmail.com',
//             'phone' => [
//                 'phone1' => '12345678',
//                 'phone2' => '56923456829',
//             ],
//          ],
//            2 => 'BITM',
//            3 => [
//                'name'=>'jahid',
//                'email' => 'jahid@gmail.com',
//                'phone' => [
//                    'phone1' => '12345678',
//                    'phone2' => '56923456829',
//                ],
//            ],
//        ];
//        foreach ($this->student as $key => $item)
//
//        {
//            if(is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if(is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value;
//                            echo  ' ';
//                        }
//                    }
//                    else
//                    {
//                        echo $value. ' ';
//                    }
//                }
//            }
//            else
//                {
//                echo $item;
//            }
//            echo '<br/>';
//        }


    public $student = [];
    public function index()
    {
        $this->student = [
            0=>[
                'name'=>'salah',
                'email' => 'jahid@gmail.com',
                'phone' => [
                    'phone1' => '12345678',
                    'phone2' => '56923456829',
                ],
            ],
            1=>[
          'name'=>'jahid',
            'email' => 'jahid@gmail.com',
           'phone' => [
                 'phone1' => '12345678',
                 'phone2' => '56923456829',
             ],
          ],
            2 => 'BITM',
            3 => [
                'name'=>'jahid',
                'email' => 'jahid@gmail.com',
                'phone' => [
                    'phone1' => '12345678',
                    'phone2' => '56923456829',
                ],
            ],
        ];
        echo '<pre>';
//        print_r($this->student);
            var_dump($this->student);

    }
   }