
// Load journal and chat history
function loadJournalHistory(){
    fetch("getjournal.php")
    .then(res => res.text())
    .then(data => document.getElementById("journalHistory").value = data);
}

function loadChatHistory(){
    fetch("getchat.php")
    .then(res => res.text())
    .then(data => document.getElementById("chatHistory").value = data);
}

window.onload = function(){
    loadJournalHistory();
    loadChatHistory();
}

// Save mood
function saveMood() {
    let mood = document.getElementById("moodSelect").value;
    fetch("mood.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: "mood=" + encodeURIComponent(mood)
    })
    .then(res => res.text())
    .then(data => document.getElementById("moodMsg").innerText = data);
}

// Save journal
function saveJournal() {
    let journal = document.getElementById("journalText").value;
    fetch("journal.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: "journal=" + encodeURIComponent(journal)
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("journalMsg").innerText = data;
        document.getElementById("journalText").value = "";
        loadJournalHistory();
    });
}

// AI Chat
function sendChat() {
    let message = document.getElementById("aiInput").value;
    fetch("ai.php", {
        method: "POST",
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        body: "message=" + encodeURIComponent(message)
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("aiReply").innerText = "AI: " + data;
        document.getElementById("aiInput").value = "";
        loadChatHistory();
    });
}
