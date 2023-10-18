let question = [
    {
      num: 1,
      title: "Which module gives control of the CPU to the process selected by the short-term scheduler?",
      option: ["dispatcher", "interrupt", "scheduler", "none of the mentioned"],
      ans: "a"
    },
    {
      num: 2,
      title: "The interval from the time of submission of a process to the time of completion is termed as ____________",
      option: ["waiting time", "turnaround time", "response time", "throughput"],
      ans: "b"
    },
    {
      num: 3,
      title: "Process are classified into different groups in ____________",
      option: ["shortest job scheduling algorithm", "shortest job scheduling algorithm", "priority scheduling algorithm", "multilevel queue scheduling algorithm"],
      ans: "d"
    },
    {
      num: 4,
      title: "Which one of the following can not be scheduled by the kernel?",
      option: ["kernel level thread", "user level thread", "process", "none of the mentioned"],
      ans: "b"
    },
    {
      num: 5,
      title: "Which of the following do not belong to queues for processes?",
      option: ["Job Queue", "PCB queue", "Device Queue", "Ready Queue"],
      ans: "b"
    },
    {
      num: 6,
      title: "When the process issues an I/O request __________",
      option: ["It is placed in an I/O queue", "It is placed in a waiting queue", "It is placed in the ready queue","It is placed in the Job queue"],
      ans: "a"
    }
  ];
  
  let abc = ["a", "b", "c", "d"];
  let sum = 0;
  let interval;
  let opt;
  let startBox = document.querySelector(".starter");
  let container = document.querySelector(".container");
  
  let queBox = document.querySelector(".question-box");
  let nextBtn = document.getElementById("next-btn");
  let finishBtn = document.getElementById("finish-btn");
  let timerDiv = document.querySelector(".timer");
  let resultBox = document.querySelector(".result-box");
  let index = 0;
  const eachTime = 15;
  let timeLimit = question.length * eachTime;
  const fixedTime = timeLimit;
  // start quiz
  function startQuiz(starter) {
    startBox.classList.add("hide");
    container.classList.remove("hide");
    interval = setInterval(timer, 1000);
  }
  
  for (i = 0; i < question.length; i++) {
    queBox.innerHTML +=
      `<div class='section' id='${question[i].num}'>` +
      `<p class='title'>${question[i].title}</p>` +
      `</div>`;
    let section = queBox.querySelectorAll(".section");
    for (k = 0; k < 4; k++) {
      section[
        i
      ].innerHTML += `<div id='${abc[k]}'>(${abc[k]}) ${question[i].option[k]}</div>`;
    }
  }
  section = queBox.querySelectorAll(".section");
  section.forEach((section1) => {
    opt = section1.querySelectorAll("div");
    let input = document.createElement("input");
    input.hidden = true;
    input.readOnly = true;
    section1.appendChild(input);
    opt.forEach((opt1) => {
      opt1.onclick = (e) => {
        section1.querySelectorAll("div").forEach((optR) => {
          optR.classList.remove("selected");
        });
        opt1.classList.add("selected");
        input.value = e.target.id;
      };
    });
  });
  
  function increament() {
    index++;
    if (index < question.length) {
      queBox.style.transform = `translateX(${-section[0].offsetWidth * index}px)`;
    }
    if (index == question.length - 1) {
      nextBtn.classList.add("hide");
      finishBtn.classList.remove("hide");
    }
  }
  nextBtn.onclick = () => {
    increament();
  };
  
  finishBtn.onclick = () => {
    clearInterval(interval);
    index = 0;
    container.classList.add("hide");
    resultBox.classList.remove("hide");
    for (j = 0; j < section.length; j++) {
      if (section[j].querySelector("input").value == question[j].ans) {
        sum++;
        section[j].querySelector(".selected").innerHTML +=
          "<i class='fa fa-check ricon'></i>";
      } else if (section[j].querySelector(".selected")) {
        section[j].querySelector(".selected").classList.add("wrong");
        section[j].querySelector(".selected").innerHTML +=
          "<i class='fa fa-times ricon'></i>";
      }
    }
    resultBox.querySelector("#got-num").innerHTML = sum;
    resultBox.querySelector("#total-num").innerHTML = question.length;
    document.cookie = `score=${sum}`;
    document.cookie = `quiz=${2}`;

  };
  
  function resultShow() {
    index = 0;
    sum = 0;
    container.classList.remove("hide");
    resultBox.classList.add("hide");
    nextBtn.classList.remove("hide");
    finishBtn.classList.remove("hide");
    queBox.style.transform = `translateX(0px)`;
    for (m = 0; m < question.length; m++) {
      section[m].querySelector(`#${question[m].ans}`).classList.add("correct");
    }
    queBox.style.pointerEvents = "none";
  }
  // timer start
  let min = (timeLimit / 60).toString().split(".")[0];
  let sec = timeLimit % 60;
  if (min < 10) min = "0" + min;
  if (sec < 10) sec = "0" + sec;
  timerDiv.innerHTML = min + " : " + sec;
  function timer() {
    timeLimit--;
    min = (timeLimit / 60).toString().split(".")[0];
    sec = timeLimit % 60;
    if (min < 10) min = "0" + min;
    if (sec < 10) sec = "0" + sec;
    if(timeLimit<60){
     document.getElementById('al').style.display="block"
    }
    if (timeLimit === 0) {
        clearInterval(interval);
        nextBtn.classList.add("hide");
        finishBtn.classList.remove("hide");
        queBox.style.pointerEvents = "none";
        
        var dialogBox = document.getElementById("dialogBox");
        dialogBox.classList.remove("hide");
        
        var closeBtn = document.getElementById("closeBtn");
        closeBtn.addEventListener("click", function() {
          dialogBox.classList.add("hide");
        });
      }
      
    timerDiv.innerHTML = min + " : " + sec;
  }
  //timer end
  document.onkeydown = (e) => {
    e.preventDefault();
    if (e.keyCode == 13 && index + 1 < question.length) {
      increament();
    }
  };
  window.onresize = () => {
    queBox.style.transform = `translateX(${-section[0].offsetWidth * index}px)`;
  };
  window.oncontextmenu = (e) => {
    e.preventDefault();
  };