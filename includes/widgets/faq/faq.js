var FAQ;
(function (FAQ) {
    function selectCategory(target, name) {
        let parent = target.parentElement;
        let host = parent.parentElement;
        let targetIndex = -1;
        for (var i = 0; i < parent.children.length; i++) {
            parent.children[i].classList.remove('selected');
            if (parent.children[i] == target) {
                targetIndex = i;
            }
        }
        target.classList.add('selected');
        let questionCategories = host.querySelectorAll('.faq-question-category');
        for (var i = 0; i < questionCategories.length; i++) {
            questionCategories[i].classList.add('zero-size');
        }
        if (targetIndex >= 0) {
            questionCategories[targetIndex].classList.remove('zero-size');
        }
    }
    FAQ.selectCategory = selectCategory;
    function toggleQuestionExpanded(target) {
        target.classList.toggle('expanded');
        let textElement = target.parentElement.children[1];
        if (textElement.classList.contains('zero-size')) {
            textElement.classList.remove('zero-size');
        }
        else {
            textElement.classList.add('zero-size');
        }
    }
    FAQ.toggleQuestionExpanded = toggleQuestionExpanded;
})(FAQ || (FAQ = {}));
//# sourceMappingURL=faq.js.map