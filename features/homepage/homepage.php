<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <nav class="container-menu">
            <ul class="container-menu-list">
                <a class="container-menu-item"><i class="fa-solid fa-list"></i>Danh sách sản phẩm</a>
                <a href="" class="container-menu-item"><i class="fa-solid fa-cart-shopping"></i>Đặt hàng nhanh</a>
                <a href="" class="container-menu-item"><i class="fa-solid fa-star"></i>Giá tốt mỗi ngày</a>
                <a href="" class="container-menu-item"><i class="fa-solid fa-bullhorn"></i>Trịnh Trần Phương Tuấn</a>
                <a href="" class="container-menu-item"><i class="fa-solid fa-heart"></i>Review rau củ quả nhà Phương
                    Tuấn</a>
            </ul>
        </nav>
        <div class="container-between">
            <nav class="between">
                <ul class="between-menu">
                    <li class="between-item">
                        <a href="" class="between-link">Sản phẩm sơ chế</a><br>
                        <a href="" class="between-link">Rau củ quả nước ép</a><br>
                        <a href="" class="between-link">Trái cây tươi</a><br>
                        <a href="" class="between-link">Nấm-Măng</a><br>
                        <a href="" class="between-link">Rau ăn lá-Salad</a><br>
                        <a href="" class="between-link">Rau sống-Salad</a><br>
                        <a href="" class="between-link">Rau rừng - Cây thảo dược</a><br>
                        <a href="" class="between-link">Cà chua, ớt</a><br>
                        <a href="" class="between-link">Rau ăn bông</a><br>
                        <a href="" class="between-link">Các loại củ - Khoai</a><br>
                        <a href="" class="between-link">Rau thơm, củ, quả hạt gia vị</a><br>
                        <a href="" class="between-link">Combo rau gia đình, bé ăn dặm</a><br>
                        <a href="" class="between-link">Bách hóa Online</a><br>
                        <a href="" class="between-link">Rau ăn quả</a><br>
                        <a href="" class="between-link">Đậu, hạt, ngũ cốc</a><br>
                    </li>
                </ul>
            </nav>
            <!-- Slide ảnh -->
            <div class="slider-container">
                <img id="sliderImage" src="https://i.pinimg.com/736x/01/e5/bf/01e5bfa0ae3388d00e5b675571fa0034.jpg"
                    alt="Ảnh slide" />
            </div>



            <!-- JS để chuyển ảnh tự động -->
            <script>
            const images = ["https://i.pinimg.com/1200x/86/b7/84/86b7842b1fe1c9f02c70241733810f42.jpg",
                "https://i.pinimg.com/736x/d4/7d/62/d47d62c40cffe9ac87fcae9a036c0b3f.jpg",
                "https://i.pinimg.com/736x/2a/ac/4c/2aac4c044012319c75ecc4b039d5682d.jpg"
            ];
            let index = 0;
            setInterval(() => {
                index = (index + 1) % images.length;
                document.getElementById("sliderImage").src = images[index];
            }, 3000);
            </script>
        </div>

        <div class="combo-container">
            <h1>Combo dinh dưỡng</h1>
            <!-- Combo 1 -->
            <div class="combo-item">
                <img src="https://i.pinimg.com/736x/d9/88/d3/d988d3fcb1b7d219b95e8df4f089003b.jpg" alt="Combo 1">
                <div class="combo-body">
                    <div class="tag">Giao trong ngày</div>
                    <div class="combo-name">Combo family 89k_001</div>
                    <div class="combo-desc">Rau là phải tươi. Nhận đặt rau theo nhu cầu của bạn.</div>
                    <div class="price">89.000₫</div>
                </div>
                <button class="order-button">ĐẶT MÓN</button>
            </div>

            <!-- Combo 2 -->
            <div class="combo-item">
                <img src="https://i.pinimg.com/736x/b9/d1/1a/b9d11adafd4626cdd1d4a84342d3b743.jpg" alt="Combo 2">
                <div class="combo-body">
                    <div class="tag">Giao trong ngày</div>
                    <div class="combo-name">Combo family 89k_002</div>
                    <div class="combo-desc">Rau là phải tươi. Nhận đặt rau theo nhu cầu của bạn.</div>
                    <div class="price">89.000₫</div>
                </div>
                <button class="order-button">ĐẶT MÓN</button>
            </div>

            <!-- Combo 3 -->
            <div class="combo-item">
                <img src="https://i.pinimg.com/736x/2c/32/3a/2c323a7137668f8ea830590ecab6f6a8.jpg" alt="Combo 3">
                <div class="combo-body">
                    <div class="tag">Giao trong ngày</div>
                    <div class="combo-name">Combo baby 59k_001</div>
                    <div class="combo-desc">Rau là phải tươi. Nhận đặt rau theo nhu cầu của bạn.</div>
                    <div class="price">59.000₫</div>
                </div>
                <button class="order-button">ĐẶT MÓN</button>
            </div>

            <!-- Combo 4 -->
            <div class="combo-item">
                <img src="https://i.pinimg.com/1200x/54/c0/ce/54c0ce4d6dd99b50cb7f9101b8cba45f.jpg" alt="Combo 4">
                <div class="combo-body">
                    <div class="tag">Giao trong ngày</div>
                    <div class="combo-name">Combo baby 59k_002</div>
                    <div class="combo-desc">Rau là phải tươi. Nhận đặt rau theo nhu cầu của bạn.</div>
                    <div class="price">59.000₫</div>
                </div>
                <button class="order-button">ĐẶT MÓN</button>
            </div>
        </div>
    </div>
</body>

</html>