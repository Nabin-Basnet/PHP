document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("dateForm");
    const date1 = document.getElementById("date1");
    const date2 = document.getElementById("date2");
    const errorMessage = document.getElementById("errorMessage");
    const successMessage = document.getElementById("successMessage");

    form.addEventListener("submit", (event) => {
        // Prevent default submission to allow client-side validation
        event.preventDefault();

        const date1Value = new Date(date1.value);
        const date2Value = new Date(date2.value);

        if (isNaN(date1Value) || isNaN(date2Value)) {
            errorMessage.textContent = "Please enter valid dates.";
            return;
        }

        const timeDifference = Math.abs(date2Value - date1Value);
        const dayDifference = timeDifference / (1000 * 60 * 60 * 24);

        successMessage.textContent = `The difference between the dates is ${dayDifference} days.`;

        // Optionally add a loading spinner here

        // After validation, submit the form
        form.submit();
    });

    form.addEventListener("reset", () => {
        errorMessage.textContent = "";
        successMessage.textContent = "";
    });
});
