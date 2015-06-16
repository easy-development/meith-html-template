var StoryList = {

  containerObject              : {},
  storyListObject              : {},
  storyListAttribute           : 'data-story-list',
  storyListTargetObject        : {},
  storyListTarget              : 'ul > li',
  storyListTargetAttribute     : 'data-story-list-target',
  storyListTextList            : [],
  storyListCharactersInterval  : 25,
  storyListCoolDown            : 1500,
  storyListExitMessageAttribute: "data-story-list-exit-message",
  storyListExitMessage         : "...",

  Init : function(containerObject) {
    this.containerObject = containerObject;

    this._setupSettings();
    this._setInformation();
    this.startStoryCycle();
  },

  _setupSettings : function() {
    this.storyListObject = this.containerObject.find(
        this.containerObject.attr(this.storyListAttribute)
    );

    this.storyListTarget = (typeof this.containerObject.attr(this.storyListTargetAttribute) === "undefined" ?
        this.storyListTarget : this.containerObject.attr(this.storyListTargetAttribute));

    this.storyListExitMessage = (typeof this.containerObject.attr(this.storyListExitMessageAttribute) === "undefined" ?
        this.storyListExitMessage : this.containerObject.attr(this.storyListExitMessageAttribute));

    this.storyListTargetObject = this.containerObject.find(this.storyListTarget);
  },

  _setInformation : function() {
    var objectInstance = this;

    this.storyListTargetObject.each(function(){
      objectInstance.storyListTextList[objectInstance.storyListTextList.length] = jQuery(this).text();
    });
  },

  startStoryCycle : function() {
    this.storyListTargetObject.hide();
    this.displayStory(this.storyListTextList[0], this, 'storyCycleResponse', {
      textIndex : 0
    });
  },

  storyCycleResponse : function(callbackInformation) {
    var textIndex = callbackInformation.textIndex + 1;

    if(this.storyListTextList.length + 1 == textIndex)
      this.displayStory(this.storyListExitMessage);
    else {
      this.storyListTargetObject.eq(callbackInformation.textIndex).fadeIn("slow");

      this.displayStory(this.storyListTextList[textIndex], this, 'storyCycleResponse', {
        textIndex : textIndex
      });
    }
  },

  displayStory : function(storyText, callbackObject, callbackMethod, callbackInformation) {
    if(typeof storyText === "undefined")
      storyText = this.storyListExitMessage;
    if(this.storyListObject.html() == storyText)
      return;

    this.storyListObject.html("");

    var objectInstance   = this,
        currentTextIndex = 0,
        currentInterval  = setInterval(function(){
          if(typeof storyText === "undefined")
            clearInterval(currentInterval);

          if(currentTextIndex == storyText.length) {
            clearInterval(currentInterval);
            setTimeout(function(){
              if(typeof callbackObject !== "undefined"
                  && typeof callbackMethod !== "undefined")
                callbackObject[callbackMethod].call(callbackObject, callbackInformation);
            }, objectInstance.storyListCoolDown);
          } else {
            objectInstance.storyListObject.append(storyText[currentTextIndex]);
            currentTextIndex++;
          }
        }, this.storyListCharactersInterval);
  }

};

jQuery(document).ready(function(){

  jQuery('[data-story-list]').each(function(){
    var storyListInstance = {};// Force empty object

    storyListInstance = jQuery.extend(1, {}, StoryList);
    storyListInstance.Init(jQuery(this));
  });

});
