<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Notifications\Notifiable;
    class MenuItem extends Model
    {
        use HasFactory, Notifiable;

        protected $fillable = ['name', 'description', 'price', 'category', 'is_available', 'image_path'];
    }
