let griv = [];

const listView = document.getElementById("listView");
const formview = document.getElementById("formView");

// Show form
document.getElementById("newGrievanceBtn").addEventListener("click", function () {
    listView.style.display = "none";
    formview.style.display = "block";
});

// Go back to list
document.getElementById("myGrievancesBtn").addEventListener("click", function () {
    formview.style.display = "none";
    listView.style.display = "block";
});

// Cancel button
document.getElementById("cancelBtn").addEventListener("click", function () {
    formview.style.display = "none";
    listView.style.display = "block";
});

// Create card function
function createCard(newgriv) {
    const div = document.createElement("div");
    div.className = "g1";
    div.innerHTML = `
        <div class="status">
            <p>${newgriv.id}</p>
            <p class="pending">${newgriv.status}</p>
            <p>Filed ${newgriv.date}</p>
        </div>
        <div class="reason">
            <h2>${newgriv.subject}</h2>
        </div>
        <div class="detail">
            ${newgriv.desc}
        </div>
    `;
    return div;
}

// Submit
document.getElementById("submitGrivBtn").addEventListener("click", function () {
    const type    = document.getElementById("griv-type").value;
    const subject = document.getElementById("griv-subject").value.trim();
    const desc    = document.getElementById("griv-desc").value.trim();

    // 1. validate
    if (!type || !subject || !desc) {
        document.getElementById("formError").style.display = "block";
        return;
    }

    document.getElementById("formError").style.display = "none";

    // 2. create object
    const newgriv = {
        id:      "GRV-0" + (griv.length + 4),
        type:    type,
        subject: subject,
        desc:    desc,
        date:    new Date().toLocaleDateString("en-IN", {
                     day: "numeric",
                     month: "short",
                     year: "numeric"
                 }),
        status:  "pending"
    };

    // 3. push to array
    griv.push(newgriv);

    // 4. create card and append
    const card = createCard(newgriv);
    listView.prepend(card);

    // 5. reset form
    document.getElementById("griv-type").value = "";
    document.getElementById("griv-subject").value = "";
    document.getElementById("griv-desc").value = "";

    // 6. switch to list
    formview.style.display = "none";
    listView.style.display = "block";

    alert("Grievance submitted successfully!");
});