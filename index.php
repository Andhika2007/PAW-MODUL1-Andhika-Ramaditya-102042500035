<?php
$produk = [
    [
        "nama" => "Laptop Productivity",
        "kategori" => "Laptop",
        "harga" => 8500000,
        "stok" => 3,
        "gambar" => "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "nama" => "Smartphone Pro",
        "kategori" => "Smartphone",
        "harga" => 6500000,
        "stok" => 5,
        "gambar" => "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "nama" => "Monitor 24 Inch",
        "kategori" => "Monitor",
        "harga" => 1800000,
        "stok" => 4,
        "gambar" => "https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "nama" => "Wireless Headphone",
        "kategori" => "Audio",
        "harga" => 850000,
        "stok" => 0,
        "gambar" => "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "nama" => "Smart Watch",
        "kategori" => "Wearable",
        "harga" => 2200000,
        "stok" => 7,
        "gambar" => "https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=600&q=80"
    ],
    [
        "nama" => "Mechanical Keyboard",
        "kategori" => "Aksesoris",
        "harga" => 950000,
        "stok" => 6,
        "gambar" => "https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=600&q=80"
    ]
];

$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>

        <div class="container navbar">

            <h2>Cia Store</h2>

            <nav>
                <a href="#home">Home</a>
                <a href="#produk">Produk</a>
                <a href="#about">About</a>
            </nav>

        </div>

    </header>

    <section class="hero" id="home">

        <div class="container">

            <p>CIA STORE</p>

            <h1>Technology For Your Needs.</h1>

            <p>
                Temukan berbagai perangkat dan aksesoris
                teknologi untuk kebutuhan sehari-hari.
            </p>

            <a href="#produk">
                Lihat Produk
            </a>

        </div>

    </section>

    <section class="catalog" id="produk">

        <div class="container">

            <div class="catalog-header">
                <div>
                    <small>OUR PRODUCTS</small>
                    <h2>Katalog Produk</h2>
                </div>

                <div class="total">
                    Total Produk: <?php echo $jumlahProduk; ?>
                </div>
            </div>


            <div class="product-grid">

                <?php foreach ($produk as $item): ?>

                    <?php
                    // Status stok
                    if ($item["stok"] > 0) {
                        $status = "Tersedia";
                    } else {
                        $status = "Stok Habis";
                    }

                    // Harga dan diskon
                    if ($item["harga"] >= 1000000) {
                        $harga = $item["harga"] * 0.9;
                        $diskon = true;
                    } else {
                        $harga = $item["harga"];
                        $diskon = false;
                    }
                    ?>


                    <div class="card">

                        <!-- Foto -->
                        <div class="card-image">

                            <img src="<?php echo $item["gambar"]; ?>"
                                alt="<?php echo $item["nama"]; ?>">

                            <?php if ($diskon): ?>
                                <span class="diskon">-10%</span>
                            <?php endif; ?>

                        </div>


                        <!-- Isi Produk -->
                        <div class="card-content">

                            <small>
                                <?php echo $item["kategori"]; ?>
                            </small>

                            <h3>
                                <?php echo $item["nama"]; ?>
                            </h3>


                            <!-- Harga -->
                            <?php if ($diskon): ?>

                                <p class="harga-lama">
                                    Rp<?php echo number_format($item["harga"], 0, ",", "."); ?>
                                </p>

                            <?php endif; ?>

                            <p class="harga">
                                Rp<?php echo number_format($harga, 0, ",", "."); ?>
                            </p>


                            <!-- Stok -->
                            <div class="stock">

                                <span>
                                    Stok: <?php echo $item["stok"]; ?>
                                </span>

                                <span>
                                    <?php echo $status; ?>
                                </span>

                            </div>


                            <!-- Tombol -->
                            <?php if ($item["stok"] > 0): ?>

                                <button>Beli Sekarang</button>

                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <section class="about" id="about">

        <div class="container">

            <small>ABOUT CIA STORE</small>

            <h2>Tentang Cia Store</h2>

            <p>
                Cia Store menyediakan berbagai perangkat dan
                aksesoris teknologi dengan informasi produk
                dan ketersediaan stok yang mudah dilihat.
            </p>

        </div>

    </section>

        <!-- FOOTER -->
    <footer>

        <p>
            © 2026 Cia Store
        </p>

    </footer>

</body>
</html>