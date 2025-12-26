<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home.index',[
            'title'=>'beranda',
            'beranda'=>[[
                'beranda_title'=>'Ahlul Ilmi',
                'beranda_deskripsi'=>'Ahlul Ilmi wal fadhli',
                'jumlah_departemen'=>'7',
                'jumlah_kegiatan'=>'9',
                'jumlah_divisi'=>'6',
                'jadwal_kajian'=>'7 hari',
                'jumlah_SDM'=>'150 orang'
            ]
            ]
        ]);
    }

    public function galeri()
{
        return view('/galeri/index',[
            'title'=>'Galeri',
        ]
        );
    }
    public function kajian()
    {
            return view('/kajian/index',[
                'title'=>'Kajian',
            ]
            );
        }
    

        public function live_streaming()
    {
            return view('/live-streaming/index',[
                'title'=>'Live',
            ]
            );
        }

        public function artikel()
    {
            return view('/artikel/index',[
                'title'=>'artikel',
            ]
            );
        }

        public function about()
        {
                return view('/about/index',[
                    'title'=>'Tentang kami',
                ]
                );
            }

            public function login()
            {
                    return view('/login/index',[
                        'title'=>'login',
                    ]
                    );
                }

                public function users_create()
            {
                    return view('/users/create',[
                        'title'=>'users',
                    ]
                    );
                }

                public function berita()
                {
                        return view('/berita/index',[
                            'title'=>'Berita',
                        ]
                        );
                    }


}

