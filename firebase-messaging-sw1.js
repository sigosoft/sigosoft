
importScripts('./demo/dofody/dist/js/firebase/firebase-app.js');
importScripts('./demo/dofody/dist/js/firebase/firebase-messaging.js');

var config = {
  apiKey: "AIzaSyCkxpi7KkKhNuvkBV0l6up6ci_r3FeD09A",
  authDomain: "dofody-2e318.firebaseapp.com",
  databaseURL: "https://dofody-2e318.firebaseio.com",
  projectId: "dofody-2e318",
  storageBucket: "dofody-2e318.appspot.com",
  messagingSenderId: "907598264555",
};
firebase.initializeApp(config);

var messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  var notificationTitle = 'Doctor is calling';
  var notificationOptions = {
    body: 'Call from doctor for everybody',
    icon: './demo/dofody/dist/img/logo.png'
  };
  
  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});
