
// Execute the program after the page loads.
window.onload = function(){
// Getting the submit button into a variable
	var submit_button = document.getElementById('submit');
// When the submit button is clicked, execute the function.
	submit_button.onclick = function(){
// We create an empty array that will later store
// the answers from our quiz.
	var answers = new Array();
// The parent element of the radio button 
// that has been checked will be stored in this array.
	var elements = new Array();
// An array that holds the values of the radio buttons
// that are correct answers.
	var correct_answers = new Array('a', 'e', 'j', 'p', 'q', 'v', 'y', '5', '7');
// When the user selects the wrong answer
// we shall explain to them why their
// answer was wrong and give addional historial info.
	var correct_explanation  = new Array(' نجيب محفوظ','عبد الحميد الكاتب ','كعب بن زهير','الكبد','الوردي','بلوتو','الخفاش','87 %','656 عضلة'
								
								);
// Number of correct answers will be stored here.
	var correct_answers_chosen = 0;
// Get the length of all elements with the element name of 'input'
// and loop through them. 
		for(var x = 0; x < document.getElementsByTagName('input').length; x++){
// If one of our radio buttons has been checked,
// put their value in the answers array we declared earlier.
			if(document.getElementsByTagName('input')[x].checked){
				answers.push(document.getElementsByTagName('input')[x].value);
// The the name of the parent element that holds the radio button.
				elements.push(document.getElementsByTagName('input')[x].parentNode);
			}
			}
// All answers are stored in the answers array. Loop through them
// and in each iteration, check whether they match the correct_answers array.
// If it does, increment the correct_answers_chose variable plus one.
// That means the option the user has chosen is the correct one. 
// Also, add the parent element the class name of "correct_answer"
// that will color it gree and it will add the 'Correct' word next to it.
			for(var i = 0; i < answers.length; i++){
				if(answers[i] == correct_answers[i]){
					correct_answers_chosen++;
					elements[i].innerHTML += ' اجابة صحيحة';  
					elements[i].className = 'correct_answer';
				}else{
// If the answer given is wrong, do not increment the correct_answers_chose 
// variable and give the parent element of that particular radio button 
// the class name of "wrong_answer" that will color it red and it will
// give addional infor with the innerHTML property that is stored in the
// correct_explanation array.
					elements[i].innerHTML += '<br /> ' + correct_explanation[i]; 
					elements[i].className = 'wrong_answer';
				}
			}
// Display the number of correct answers in the above H2 header
// out of all questions.
			quiz_results.innerHTML = 'لديك  ' + correct_answers_chosen + ' اجوبة صحيحة من  ' + correct_answers.length+ ' اسئلة';
// We set the correct_answers_chosen variable equal to 0 and we disable the submit button
// since we do not
// want the variable to keep incrementing if the user clicks the submit button
// like a crazy duck.
			correct_answers_chosen = 0;
			submit_button.disabled = true;
// We also make the "Take this quiz again" button on the 
// right of the screen visible as well
// so that the user won't wonder where the hell to click
// if he/she wants to take the quiz again because it is awesome.
		reload_quiz.style.display = 'inline';
	}
// We make it so that when the user clicks the "Take this quiz again"
// the page reloads.
		reload_quiz.onclick = function(){
			location.reload();
		}
	}
// __END__