package com.example.unipi.conchro.bookapp;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.app.ProgressDialog;
import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ProgressBar;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;


public class RegisterActivity extends AppCompatActivity {

    private Button registerbutton;
    private EditText UserEmail,UsserPassword;
    private TextView areadyhaveacountlink;
    private FirebaseAuth authenticator;

    private ProgressBar progressBar;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        authenticator = FirebaseAuth.getInstance();
        initiaizefields();
        areadyhaveacountlink.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                SendUserTologinActivity();
            }
        });

        registerbutton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                CreateNewAcount();
            }


        });
    }

    private void CreateNewAcount() {
        String email = UserEmail.getText().toString();
        String password = UsserPassword.getText().toString();
        if(TextUtils.isEmpty(email)){
            Toast.makeText(this, "Email field is empty", Toast.LENGTH_SHORT).show();
        }
        if(TextUtils.isEmpty(password)){
            Toast.makeText(this, "Password field is Empty", Toast.LENGTH_SHORT).show();
        }
        else{
            //progressBar.set
            authenticator.createUserWithEmailAndPassword(email,password).addOnCompleteListener(new OnCompleteListener<AuthResult>() {
                @Override
                public void onComplete(@NonNull Task<AuthResult> task) {
                    if (task.isSuccessful()){
                        Toast.makeText(RegisterActivity.this, "Registration comlpete", Toast.LENGTH_SHORT).show();
                        SendUserTologinActivity();
                    }
                    else {
                        String mesage = task.getException().toString();
                        Toast.makeText(RegisterActivity.this, "ERROR"+mesage, Toast.LENGTH_SHORT).show();
                    }
                }
            });
        }
    }

    private void initiaizefields() {
        registerbutton =  (Button) findViewById(R.id.register_button);
        UserEmail =  (EditText) findViewById(R.id.register_email);
        UsserPassword =  (EditText) findViewById(R.id.register_password);
        areadyhaveacountlink =  (TextView) findViewById(R.id.register_login_link);
        progressBar = new ProgressBar(this);
    }
    private void SendUserTologinActivity() {
        Intent registerntent = new Intent(RegisterActivity.this,LoginActivity.class);
        startActivity(registerntent);
    }
}