// Import the functions you need from the SDKs you need
//import { initializeApp } from "firebase/app";
import {initializeApp} from "firebase/app";
//import firebase from 'firebase/compat/app';
//import 'firebase/compat/auth';
//import 'firebase/compat/firestore';
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyAvECfmvJx7SfbRKRkQFvBToGCZHECyvmE",
  authDomain: "testcode-348502.firebaseapp.com",
  projectId: "testcode-348502",
  storageBucket: "testcode-348502.appspot.com",
  messagingSenderId: "43783299297",
  appId: "1:43783299297:web:892c8d28f3f5eb900597a0"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

function passvalues() {

            var firstname = document.getElementById("txt1").value;
            localStorage.setItem("textvalue1", firstname);



            var secondname = document.getElementById("txt2").value;
            localStorage.setItem("textvalue2", secondname);



            var email = document.getElementById("txt3").value;
            localStorage.setItem("textvalue3", email);



            var pass = document.getElementById("txt4").value;
            localStorage.setItem("textvalue4", pass);
            return false;
        }