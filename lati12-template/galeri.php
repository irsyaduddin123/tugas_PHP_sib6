<!-- <h2>Galeri</h2> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        /* Style untuk galeri */
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            grid-gap: 20px;
        }

        .gallery .image {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .gallery .image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .gallery .image:hover img {
            transform: scale(2fr);
        }

        .gallery .image .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery .image:hover .overlay {
            opacity: 1;
        }
    </style>
</head>
<body>
    <h1 style= "text-align: ">Gallery random di laptop</h1>
    <div class="gallery">
        <?php
        // Mendapatkan daftar file dalam folder 'images'
        $files = glob('images/*');

        // Menampilkan setiap file dalam galeri
        foreach ($files as $file) {
            echo '<div class="image">';
            echo '<img src="' . $file . '" alt="Image">';
            echo '<div class="overlay">Click to view</div>'; // Teks tambahan
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
