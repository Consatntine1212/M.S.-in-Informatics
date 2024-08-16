package com.unipi.talepis.androidplh2022_3_t;

import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;

import android.content.SharedPreferences;
import android.graphics.Color;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText inputData;
    SharedPreferences preferences;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        inputData = findViewById(R.id.editTextTextPersonName);
        preferences = PreferenceManager.getDefaultSharedPreferences(getApplicationContext());
    }
    private void showMessage(String title, String message){
        new AlertDialog.Builder(this)
                .setTitle(title)
                .setMessage(message)
                .setCancelable(true)
                .show();
    }
    public void read(View view){
        String s = preferences.getString("mykey1","No data yet");
        showMessage("Data",s);
    }
    public void write(View view){
        if (!inputData.getText().toString().isEmpty()){
            SharedPreferences.Editor editor = preferences.edit();
            editor.putString("mykey1",inputData.getText().toString());
            //editor.putString("otherkey","Hello");
            editor.apply();
            Toast.makeText(this, "Data saved!", Toast.LENGTH_SHORT).show();
        }else {
            Toast.makeText(this, "You need to write some data first", Toast.LENGTH_SHORT).show();
        }
    }
    public void changeColor(View view){
        //getWindow().getDecorView().setBackgroundColor(Color.LTGRAY);
        getWindow().getDecorView().setBackgroundColor(Color.parseColor("lime"));
    }
}








