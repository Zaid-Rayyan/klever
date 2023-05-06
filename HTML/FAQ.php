<?php 
session_start();
require "../cartProducts.php";?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../Images/sliders/Logo.png" type="image/png">
    <title>Klever | FAQ</title>
    <!--Style CSS-->
    <link rel="stylesheet" href="../CSS/FAQ.css" />
    <link rel="stylesheet" href="../CSS/Footer&Header.css" />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1+Code:wght@200&family=Raleway:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const faqs = document.querySelectorAll(".faq");
            faqs.forEach(faq => {
                faq.addEventListener("click", () => {
                    faq.classList.toggle("active");
                })
            })
        });

    </script>
</head>

<body>
    <?php
        include 'header2.php';
    ?>

    <main>
        <div class="slider">
            <img src="../Images/sliders/FAQ-S.jpg" alt="" id="sliderI">
        </div>
        <section>
            <h2 class="title">FAQs</h2>

            <div class="faq">
                <div class="question">
                    <h3>What is Home Automation ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p>Home automation is the automatic control of electronic devices in your home. These devices are connected to the Internet, which allows them to be controlled remotely.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>What is the impact of smart homes on society ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p>Automating your home will save you lots of time and effort in the process. The working force who owns smart home products will be more productive. They will also have more cash on hand due to extra savings.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Why do we need home automation ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p>With smart home devices, you can remotely monitor your home appliances and ensure that all devices are safely switched off. One of the biggest advantages of home automation is that it keeps your abode safe.</p>
                </div>
            </div>

            <div class="faq">
                <div class="question">
                    <h3>Which is the best website for Home Automation Products ?</h3>
                    <svg width="15" height="10" viewBox="0 0 42 25">
                        <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                    </svg>
                </div>
                <div class="answer">
                    <p>
                    KLEVER</p>
                </div>
            </div>
        </section>


    </main>
    <?php
        include 'footer2.html'
    ?>
</body>

</html>