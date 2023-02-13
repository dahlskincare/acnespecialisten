namespace FAQ {
    export function selectCategory(target: Element, name: String): void {
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
            questionCategories[i].classList.add('is-hidden');
        }
        if (targetIndex >= 0) {
            questionCategories[targetIndex].classList.remove('is-hidden');
        }
    }
    export function toggleQuestionExpanded(target: Element): void {
        let textElement = target.parentElement.children[1];
        if (textElement.classList.contains('is-hidden')) {
            textElement.classList.remove('is-hidden');
        } else {
            textElement.classList.add('is-hidden');
        }
    }
}

