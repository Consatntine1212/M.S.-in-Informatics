package com.example.unipi.conchro.ask1;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
    public void go1(View view){
        Intent intent1 = new Intent(MainActivity.this,MainActivity2.class);
        MainActivity.this.startActivity(intent1);
        /*
        Intent myIntent = new Intent(CurrentActivity.this, NextActivity.class);
        myIntent.putExtra("key", value); //Optional parameters
        CurrentActivity.this.startActivity(myIntent);*/
    }
    public void go2(View view){
        Intent intent2 = new Intent(MainActivity.this,MainActivity3.class);
        MainActivity.this.startActivity(intent2);
    }
}