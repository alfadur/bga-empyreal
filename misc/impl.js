
class notifqueue {
    setSynchronous(name, timeMs) {}
    setSynchronousDuraction(timeMs) {}
}
class Game {
    isCurrentPlayerActive() { return false; }
    getCurrentPlayerId() { return 0; }
    checkAction(name, optional) { return false; }
    addActionButton(id, text, handler, destination, blink, style) {}
    ajaxcall(url, args, onSuccess, onFailure) {}
    setClientState(name, args) {}
    restoreServerGameState() {}
    get notifqueue() { return new notifqueue(); }
    get isSpectator() { return false; }
}
