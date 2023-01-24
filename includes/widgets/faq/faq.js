var FAQ;
(function (FAQ) {
    function selectCategory(event, name) {
        var target = event.target;
        var parent = target.parentElement;
        var host = parent.parentElement;
        var targetIndex = -1;
        for (var i = 0; i < parent.children.length; i++) {
            parent.children[i].classList.remove('selected');
            if (parent.children[i] == target) {
                targetIndex = i;
            }
        }
        target.classList.add('selected');
        var questionCategories = host.querySelectorAll('.faq-question-category');
        for (var i = 0; i < questionCategories.length; i++) {
            questionCategories[i].classList.add('is-hidden');
        }
        if (targetIndex >= 0) {
            questionCategories[targetIndex].classList.remove('is-hidden');
        }
    }
    FAQ.selectCategory = selectCategory;
    function toggleQuestionExpanded(event) {
        var target = event.target;
        var textElement = target.parentElement.children[1];
        if (textElement.classList.contains('is-hidden')) {
            textElement.classList.remove('is-hidden');
        }
        else {
            textElement.classList.add('is-hidden');
        }
    }
    FAQ.toggleQuestionExpanded = toggleQuestionExpanded;
})(FAQ || (FAQ = {}));
//# sourceMappingURL=faq.js.map