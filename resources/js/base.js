// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyCH4bNsYSGtmpmkJUDZtKVB-CLCjkJKjtE",
    authDomain: "dku-app-last.firebaseapp.com",
    projectId: "dku-app-last",
    storageBucket: "dku-app-last.appspot.com",
    messagingSenderId: "561998948838",
    appId: "1:561998948838:web:580dce39779dbf5b108e27",
    measurementId: "G-6HCMNVGV74"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
