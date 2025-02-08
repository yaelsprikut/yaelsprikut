```javascript
const yael = {
    lovesCoding: true,
    funFact: "I probably have too many browser tabs open right now."
};

function closeAllTabs() {
    let win = window.open('', '_self');
    win.close();
}
closeAllTabs();
```

