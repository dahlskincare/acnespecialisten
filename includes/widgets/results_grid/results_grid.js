var ResultsGrid = (function() {
    'use strict';

    function showMore() {
        // Get all hidden items
        var hiddenItems = document.querySelectorAll('.results-grid-container .result-grid-item.is-hidden');

        if (hiddenItems.length === 0) {
            return;
        }

        // Show all hidden items with animation
        hiddenItems.forEach(function(item, index) {
            setTimeout(function() {
                item.classList.remove('is-hidden');
                item.classList.add('is-showing');

                // Remove animation class after animation completes
                setTimeout(function() {
                    item.classList.remove('is-showing');
                }, 500);
            }, index * 100); // Stagger the animations
        });

        // Hide the "Show More" button
        var showMoreButton = document.getElementById('show-more-results');
        if (showMoreButton) {
            showMoreButton.classList.add('is-hidden');
        }
    }

    return {
        showMore: showMore
    };
})();
