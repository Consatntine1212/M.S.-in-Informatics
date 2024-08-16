package com.example.unipi.conchro.bookapp;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.speech.tts.TextToSpeech;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.google.common.base.Splitter;
import com.google.common.collect.Lists;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.HashMap;
import java.util.Locale;

public class ReadActivity extends AppCompatActivity {
    private TextView textView;
    String value;
    TextToSpeech textToSpeech;
    Button btnText;
    private DatabaseReference databaseReference;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_read);
        textView = (TextView) findViewById(R.id.TEXT_STATUS_ID);
        btnText = (Button) findViewById(R.id.button_read);
        Bundle extras = getIntent().getExtras();
        if (extras != null) {
            value = extras.getString("key");
            //The key argument here must match that used in the other activity
        }
        textView.setText(value);
        //Toast.makeText(this, value, Toast.LENGTH_SHORT).show();
        gettext();
        // create an object textToSpeech and adding features into it
        textToSpeech = new TextToSpeech(getApplicationContext(), new TextToSpeech.OnInitListener() {
            @Override
            public void onInit(int i) {

                // if No error is found then only it will run
                if(i!=TextToSpeech.ERROR){
                    // To Choose language of speech
                    textToSpeech.setLanguage(Locale.UK);
                }
            }
        });
        // Adding OnClickListener
        btnText.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                speak(textView.getText().toString());
                //textToSpeech.speak(textView.getText().toString(),TextToSpeech.QUEUE_FLUSH,null);
            }
        });
    }

    private void gettext() {
        if (value.equals("1")){
            databaseReference = FirebaseDatabase.getInstance().getReference().child("text1");
            databaseReference.addValueEventListener(new ValueEventListener() {
                @Override
                public void onDataChange(@NonNull DataSnapshot snapshot) {
                    if (snapshot.exists()) {
                        String data = snapshot.getValue().toString();
                        textView.setText(data);
                    }
                }

                @Override
                public void onCancelled(@NonNull DatabaseError error) {

                }
            });
            textView.setText("test");
        }
        else if (value.equals("2")){
            databaseReference = FirebaseDatabase.getInstance().getReference().child("text2");
            databaseReference.addValueEventListener(new ValueEventListener() {
                @Override
                public void onDataChange(@NonNull DataSnapshot snapshot) {
                    if (snapshot.exists()) {
                        String data = snapshot.getValue().toString();
                        textView.setText(data);
                    }
                }

                @Override
                public void onCancelled(@NonNull DatabaseError error) {

                }
            });
        }
        else if (value.equals("3")){
            databaseReference = FirebaseDatabase.getInstance().getReference().child("text3");
            databaseReference.addValueEventListener(new ValueEventListener() {
                @Override
                public void onDataChange(@NonNull DataSnapshot snapshot) {
                    if (snapshot.exists()) {
                        String data = snapshot.getValue().toString();
                        textView.setText(data);
                    }
                }

                @Override
                public void onCancelled(@NonNull DatabaseError error) {

                }
            });
        }
        else if (value.equals("4")){
            databaseReference = FirebaseDatabase.getInstance().getReference().child("text4");
            databaseReference.addValueEventListener(new ValueEventListener() {
                @Override
                public void onDataChange(@NonNull DataSnapshot snapshot) {
                    if (snapshot.exists()) {
                        String data = snapshot.getValue().toString();
                        textView.setText(data);
                    }
                }

                @Override
                public void onCancelled(@NonNull DatabaseError error) {

                }
            });
        }
        else if (value.equals("5")){
            databaseReference = FirebaseDatabase.getInstance().getReference().child("text5");
            databaseReference.addValueEventListener(new ValueEventListener() {
                @Override
                public void onDataChange(@NonNull DataSnapshot snapshot) {
                    if (snapshot.exists()) {
                        String data = snapshot.getValue().toString();
                        textView.setText(data);
                    }
                }

                @Override
                public void onCancelled(@NonNull DatabaseError error) {

                }
            });
        }
    }
    private void speak(String largeText){
        int length = textToSpeech.getMaxSpeechInputLength() - 1;
        Iterable<String> chunks = Splitter.fixedLength(length).split(largeText);
        Lists.newArrayList(chunks);
        for (String chunk : chunks) {
            textToSpeech.speak(chunk,TextToSpeech.QUEUE_ADD,null);
        }
    }
}