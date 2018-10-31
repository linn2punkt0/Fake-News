/**
 * Increment like-count when you click like-button.
 */
const likeButtons = document.querySelectorAll(".likes");
likeButtons.forEach(likeButton => {
  likeButton.addEventListener("click", function() {
    const splitButton = likeButton.innerText.split(" ");
    let likeCount = parseInt(splitButton[0]);
    likeCount++;
    likeButton.innerHTML = likeCount + " Likes";
  });
});
