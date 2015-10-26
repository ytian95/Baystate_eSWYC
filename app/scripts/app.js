//change name. Contains the QeustionBlock and buttons
//handles any other buttons on the page ie Submit
function QuestionsPage(){
	
}

//Contains Questions
//variables need to be renamed
function QuestionBlock(container){
	this.container = container; //id will be adding questions to
	this.questionsList = []; //list of questions
}

QuestionBlock.prototype.addQuestions = function(questionsText){
	//There is a for(val of list) that works like a foreach in ES6+
	for(var i = 0; i < questionsText.length; i++){
		this.questionsList.push(new Question(questionsText[i], i + 1));
	}
}

QuestionBlock.prototype.show = function(){
	this.container.innerHTML = "";
	for(var i = 0; i < this.questionsList.length; i++){
		this.questionsList[i].show(this.container);
	}
}

function Question(text, id){
	this.text = text;
	this.id = id;
	this.questionWrapper = document.createElement("div");
	this.questionWrapper.className = "qWrapper";
}

Question.prototype.show = function(container){
	//div for the text
	var textDiv = document.createElement("div");
	textDiv.className = "qText";
	var t = document.createTextNode(this.text);
	textDiv.appendChild(t);
	
	//radio button group
	var radioGroup = document.createElement("paper-radio-group");
	radioGroup.className = "qGroup";
	
	for(var i = 0; i <= 2; i++){
		var radioButton = document.createElement("paper-radio-button");
		radioButton.className = "qButton";
        var value = document.createTextNode(i.toString());
        radioButton.appendChild(value);
		radioGroup.appendChild(radioButton);
	}

	this.questionWrapper.appendChild(textDiv);
	this.questionWrapper.appendChild(radioGroup);
	container.appendChild(this.questionWrapper);
}

function initialize(){
	//window.alert(document.getElementById("dmQuestions"));
	var questionBlock = new QuestionBlock(
		document.getElementById("dmQuestions"));
	
	questionBlock.addQuestions(["Makes sounds that let you know he or she is happy or upset",
		"Seems happy to see you ", "Follows a moving toy with his or her eyes", "Turns head to find the person who is talking","Holds head steady when being pulled up to a sitting position", "Brings hands together", "Laughs", "Keeps head steady when held in a sitting position", 'Makes sounds like "ga," "ma," or "ba"', "Looks when you call his or her name" ]);
	questionBlock.show();
}
window.onload = initialize;