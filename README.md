<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://media.springernature.com/full/springer-static/image/art%3A10.1038%2Fs41524-022-00803-w/MediaObjects/41524_2022_803_Fig1_HTML.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Convolutional Neural Network

Convolutional Neural Network (CNN) adalah salah satu jenis neural network yang biasa digunakan pada data image. CNN bisa digunakan untuk mendeteksi dan mengenali object pada sebuah image.
Secara garis besar CNN tidak jauh beda dengan neural network biasanya. CNN terdiri dari neuron yang memiliki weight, bias dan activation function seperti yang sudah kita pelajari pada part sebelumnya.
Lalu apa yang membedakan? Arsitektur dari CNN dibagi menjadi 2 bagian besar, Feature Extraction Layer (istilah saya sendiri :D) dan Fully-Connected Layer (MLP).

## Config Web Deeplearning CNN
```bash
$ composer install
$ php artisan migrate
$ php artisan db:seed 
$ php artisan db:seed --class=UserSeeder
$ php artisan db:seed --class=CategorySeeder
```
## Running project
```bash
php artisan serve
```
## Create migrarion
```bash
php artisan make:migration create_migration_table
php artisan migrate:refresh
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
