let mic = document.getElementById("mic");
let chatareamain = document.querySelector('.chatarea-main');
let chatareaouter = document.querySelector('.chatarea-outer');



const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();

function showusermsg(usermsg){
    let output = '';
    output += `<div class="chatarea-inner user">${usermsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

function showchatbotmsg(chatbotmsg){
    let output = '';
    output += `<div class="chatarea-inner chatbot">${chatbotmsg}</div>`;
    chatareaouter.innerHTML += output;
    return chatareaouter;
}

function chatbotvoice(message){
    const speech = new SpeechSynthesisUtterance();
    speech.text = "Unable to understand. Please Speak again";

    if(message.includes('hi')){
        speech.text = "Hello, Welcome to GSHIF. We are happy to help you";

        
    }

    if(message.includes('hello')){
        speech.text = "Hi, Welcome to GSHIF. We are happy to help you";

        
    }
    if(message.includes('unable to create account')){
        speech.text = "Oh, Sorry for your inconvience. Please Fill Complaint Form then our team will call You.";
        
    }
    if(message.includes('have payment issue')){
        speech.text = "Oh, Sorry for your inconvience. Please Fill Complaint Form then our team will call You or call on 9050570307";
    }
    if(message.includes('what is your name')){
        speech.text = "Myself G-BOT. Made by GSHIF";
    }
    if(message.includes('how are you')){
        speech.text = "I am fine, What about you?";
        
    }
    if(message.includes('thank you')){
        speech.text = "Your Welcome.";
        
    }
    
    window.speechSynthesis.speak(speech);
    chatareamain.appendChild(showchatbotmsg(speech.text));
}

recognition.onresult=function(e){
    let resultIndex = e.resultIndex;
    let transcript = e.results[resultIndex][0].transcript;
    chatareamain.appendChild(showusermsg(transcript));
    chatbotvoice(transcript);
    console.log(transcript);
}
recognition.onend=function(){
    mic.style.background="#ff3b3b";
}
mic.addEventListener("click", function(){
    mic.style.background='#39c81f';
    recognition.start();
    console.log("Activated");
})
