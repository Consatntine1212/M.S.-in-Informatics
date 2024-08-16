package com.example.unipi.conchro.bookapp;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.auth.FirebaseUser;

public class LoginActivity extends AppCompatActivity {
    private FirebaseUser currentuser;
    private Button loginbutton,secondbutton;
    private EditText UserEmail,UsserPassword;
    private TextView neadnewacoubtink;
    private FirebaseAuth authenticator;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        authenticator = FirebaseAuth.getInstance();
        currentuser = authenticator.getCurrentUser();
        initiaizefields();


        neadnewacoubtink.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                SendUserToRegisterActivity();
            }
        });

        loginbutton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                AllowUsertoLogin();
            }
        });
    }

    private void AllowUsertoLogin() {

        String email = UserEmail.getText().toString();
        String password = UsserPassword.getText().toString();
        if(TextUtils.isEmpty(email)){
            Toast.makeText(this, "Email field is Empty", Toast.LENGTH_SHORT).show();
        }
        if(TextUtils.isEmpty(password)){
            Toast.makeText(this, "Password field is Empty", Toast.LENGTH_SHORT).show();
        }
        else{
            authenticator.signInWithEmailAndPassword(email,password)
                    .addOnCompleteListener(new OnCompleteListener<AuthResult>() {
                        @Override
                        public void onComplete(@NonNull Task<AuthResult> task) {
                            if (task.isSuccessful()){
                                SendUserToHomeActivity();
                            }
                            else
                            {
                                String mesage = task.getException().toString();
                                Toast.makeText(LoginActivity.this, "ERROR"+mesage, Toast.LENGTH_SHORT).show();
                            }
                        }
                    });
        }
    }
    private void initiaizefields() {
        loginbutton =  (Button) findViewById(R.id.login_button);
        UserEmail =  (EditText) findViewById(R.id.login_email);
        UsserPassword =  (EditText) findViewById(R.id.login_password);
        neadnewacoubtink =  (TextView) findViewById(R.id.make_acount_link);
    }

    @Override
    protected void onStart(){
        super.onStart();
        if (currentuser != null){
            //SendUserToHomeActivity();
        }
    }
    private void SendUserToHomeActivity() {
        Intent loginintent = new Intent(LoginActivity.this,HomeActivity.class);
        startActivity(loginintent);
    }
    private void SendUserToRegisterActivity() {
        Intent registerntent = new Intent(LoginActivity.this,RegisterActivity.class);
        startActivity(registerntent);
    }
}