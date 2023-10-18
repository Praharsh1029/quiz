<!DOCTYPE HTML>
<html>
<head>
    <title> QUIZ</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="quiz.css">
    <style>
        .info_box {
            width: 540px;
            background: #fff;
            border-radius: 5px;
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .info_box .info-title {
            height: 60px;
            width: 100%;
            border-bottom: 1px solid lightgrey;
            display: flex;
            align-items: center;
            padding: 0 30px;
            border-radius: 5px 5px 0 0;
            font-size: 20px;
            font-weight: 600;
        }

        .info_box .info-list {
            padding: 15px 30px;
        }

        .info_box .info-list .info {
            margin: 5px 0;
            font-size: 17px;
        }

        .info_box .info-list .info span {
            font-weight: 600;
            color: #007bff;
        }

        .info_box .buttons {
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0 30px;
            border-top: 1px solid lightgrey;
        }

        .info_box .buttons button {
            margin: 0 5px;
            height: 40px;
            width: 100px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            outline: none;
            border-radius: 5px;
            border: 1px solid #007bff;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <div id="al" style="display:none">
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <strong>Last one min left!</strong> 
        </div>
    </div>

    <div class="starter">
        <button onclick="startQuiz(this)">Start</button>
    </div>
   
    <div class="container hide">
        <header>
            <p>Scheduling Quiz-1</p>
            <div class="timer"></div>
        </header>
        <div class="question-box"></div>
        <footer>
            <button id="next-btn">Next</button>
            <button id="finish-btn" class="hide">Finish</button>
        </footer>
    </div>

    <div class="result-box hide">
        <div class="num-div">
            You have got
            <p id="got-num"></p>
            out of
            <p id="total-num"></p>
        </div>
        <div class="button-box">
            <button style="color: #fff; font-weight: 500;" id="replay" onclick="resultShow()">See Result</button>
            <style>
                #replay a {
                  text-decoration: none;
                  color: #fff;
                }
              </style>
              
              <button id="replay" onclick="replay()"><a href="home.php">Homepage</a></button>
              <button id="replay"><a href="https://forms.gle/YPSg46Fi4C3kFCFN9">RATE QUIZ</a></button>

              

        </div>
    </div>
    <div id="dialogBox" class="dialog-box hide">
        <div class="dialog-content">
          <span id="closeBtn" class="close-btn">&times;</span>
          <h3>Time's up!</h3>
          <p>Sorry, your time limit has reached zero.</p>
        </div>
      </div>
      
      
      
   

    <script src="squiz1.js"></script>
</body>
</html>
