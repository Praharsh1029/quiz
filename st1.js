let question = [
    {
      num: 1,
      title: "Process of inserting an element in stack is called ____________",
      option: ["Create", "Push", "Evaluation", "Pop"],
      ans: "b"
    },
    {
      num: 2,
      title: "Process of removing an element from stack is called __________",
      option: ["Create", "Push", "Evaluation", "Pop"],
      ans: "d"
    },
    {
      num: 3,
      title: "In a stack, if a user tries to remove an element from an empty stack it is called _________",
      option: ["Underflow", "Empty collection", "Overflow", "Garbage Collection"],
      ans: "a"
    },
    {
      num: 4,
      title: "Pushing an element into stack already having five elements and stack size of 5, then stack becomes ___________",
      option: ["Overflow", "Crash", "Underflow", "User flow"],
      ans: "a"
    },
    {
      num: 5,
      title: "Entries in a stack are “ordered”. What is the meaning of this statement?",
      option: ["A collection of stacks is sortable", "Stack entries may be compared with the ‘<‘ operation", "The entries are stored in a linked list", "There is a Sequential entry that is one by one"],
      ans: "d"
    },
    {
      num: 6,
      title: "Which of the following is not the application of stack?",
      option: ["A parentheses balancing program", "Tracking of local variables at run time", "Compiler Syntax Analyzer", "Data Transfer between two asynchronous process"],
      ans: "d"
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
    document.cookie = `quiz=${3}`;
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