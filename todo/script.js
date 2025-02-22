const taskInput = document.getElementById("taskInput");
const addTaskBtn = document.getElementById("addTaskBtn");
const taskList = document.getElementById("taskList");

// Add a new task
addTaskBtn.addEventListener("click", () => {
  const taskText = taskInput.value.trim();
  if (taskText) {
    const listItem = document.createElement("li");

    listItem.innerHTML = `
      <span class="task-text">${taskText}</span>
      <div class="actions">
        <button class="edit-btn">Edit</button>
        <button class="delete-btn">Delete</button>
      </div>
    `;

    // Add event listeners for edit and delete buttons
    listItem.querySelector(".edit-btn").addEventListener("click", () => {
      editTask(listItem);
    });
    listItem.querySelector(".delete-btn").addEventListener("click", () => {
      listItem.remove();
    });

    taskList.appendChild(listItem);
    taskInput.value = ""; // Clear input field
  }
});

// Edit a task (inline editing)
function editTask(listItem) {
  const taskTextElement = listItem.querySelector(".task-text");
  const currentText = taskTextElement.textContent;

  // Create an input field for editing
  const inputField = document.createElement("input");
  inputField.type = "text";
  inputField.value = currentText;
  inputField.className = "edit-input";

  // Replace the task text with the input field
  taskTextElement.replaceWith(inputField);
  inputField.focus();

  // Save the task when the input loses focus or "Enter" is pressed
  inputField.addEventListener("blur", () => saveEdit(inputField, taskTextElement, listItem));
  inputField.addEventListener("keypress", (event) => {
    if (event.key === "Enter") {
      saveEdit(inputField, taskTextElement, listItem);
    }
  });
}

// Save the edited task
function saveEdit(inputField, taskTextElement, listItem) {
  const newText = inputField.value.trim();

  // If the new text is valid, update the task
  if (newText) {
    taskTextElement.textContent = newText;
    inputField.replaceWith(taskTextElement);
  } else {
    // If invalid, restore the original text or remove the task
    listItem.remove(); // Optionally, remove the task if blank
  }
}

// Enable "Enter" key to add a task
taskInput.addEventListener("keypress", (event) => {
  if (event.key === "Enter") {
    addTaskBtn.click();
  }
});





