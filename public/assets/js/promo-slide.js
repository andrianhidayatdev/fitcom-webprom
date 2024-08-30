$(document).ready(function () {
  const wrapper = $(".wrapper");
  let scrollAmount = 0;
  const increment = 200;

  function handleScroll(direction) {
    const maxScroll = wrapper[0].scrollWidth - wrapper.outerWidth();

    if (direction === "next") {
      if (scrollAmount < maxScroll) {
        scrollAmount += increment;
        if (scrollAmount > maxScroll) scrollAmount = maxScroll;
      } else {
        return;
      }
    } else if (direction === "prev") {
      if (scrollAmount > 0) {
        scrollAmount -= increment;
        if (scrollAmount < 0) scrollAmount = 0;
      } else {
        return;
      }
    }

    $("#nextBtn, #prevBtn").prop("disabled", true);

    wrapper.animate(
      {
        scrollLeft: scrollAmount,
      },
      400,
      function () {
        $("#nextBtn, #prevBtn").prop("disabled", false);
      }
    );
  }

  $("#nextBtn").on("click", function () {
    handleScroll("next");
  });

  $("#prevBtn").on("click", function () {
    handleScroll("prev");
  });
});
