<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test2Prepare
    </title>
    <link rel="stylesheet" href="web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
    <!-- start test button -->
    <div class="start_btn"><button>Start Test</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Test</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Test while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit"><a href="index.php" style="color:#0263ca; text-decoration=none;">Exit Test</a></button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Test Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Test2Prepare</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
            </div>
            <div class="option_list">
            </div>
        </section>

        <!-- footer of Test Box -->
        <footer>
            <div class="total_que">
            </div>
            <button class="next_btn">Next Question</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-star"></i>
        </div>
        <div class="complete_text">You've completed the Test!</div>
        <div class="score_text">
        </div>
        <div class="buttons">
            <button class="restart">Replay Test</button>
            <button class="quit"><a href="index.php" style="color:#007bff; text-decoration=none;">Quit Test</a></button>
        </div>
    </div>

    <script src="questions.js"></script>

    <script src="script.js"></script>

</body>
</html>