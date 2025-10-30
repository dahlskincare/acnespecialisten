var ResultsGrid = (function() {
    'use strict';

    var initialCount = 4; // Default, will be set dynamically

    function init() {
        // Get the initial count from the DOM
        var allItems = document.querySelectorAll('.results-grid-container .result-grid-item');
        var visibleItems = document.querySelectorAll('.results-grid-container .result-grid-item:not(.is-hidden)');
        initialCount = visibleItems.length;
    }

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

        // Toggle buttons
        var showMoreButton = document.getElementById('show-more-results');
        var showLessButton = document.getElementById('show-less-results');

        if (showMoreButton) {
            showMoreButton.classList.add('is-hidden');
        }
        if (showLessButton) {
            showLessButton.classList.remove('is-hidden');
        }
    }

    function showLess() {
        // Get all items
        var allItems = document.querySelectorAll('.results-grid-container .result-grid-item');

        // Hide items after the initial count
        allItems.forEach(function(item, index) {
            if (index >= initialCount) {
                item.classList.add('is-hidden');
                item.classList.remove('is-showing');
            }
        });

        // Toggle buttons
        var showMoreButton = document.getElementById('show-more-results');
        var showLessButton = document.getElementById('show-less-results');

        if (showMoreButton) {
            showMoreButton.classList.remove('is-hidden');
        }
        if (showLessButton) {
            showLessButton.classList.add('is-hidden');
        }

        // Scroll to results section
        var resultsSection = document.querySelector('.results-grid-widget');
        if (resultsSection) {
            resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }

    // Initialize on load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    return {
        showMore: showMore,
        showLess: showLess
    };
})();
