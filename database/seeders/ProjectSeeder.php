<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            [
                'project_name'=>'Automated Weather ETL Pipeline', 
                'github'=>'https://github.com/2BYYYY/weather_pipeline', 
                'tools'=>'Python, Airflow, Docker, DBT, PostgreSQL, Power BI',
                'difficulty'=>'easy', 
                'description'=>'Built an end-to-end ETL pipeline that extracts weather data using Python, transforms and models it with dbt, 
                                and loads it into PostgreSQL for analytics. The workflow is orchestrated with Apache Airflow, 
                                containerized with Docker for reproducible execution, and connected to Power BI for reporting and visualization.'
            ],
            [
                'project_name'=>'eSkolar: A Centralized Scholarship Platform',
                'github'=>'https://github.com/2BYYYY/Groq_GPT',
                'tools'=>'Python, Groq, Railways, ChromaDB, FastAPI',
                'difficulty'=>'medium',
                'description'=>'Built and deployed a Retrieval-Augmented Generation (RAG) based AI chatbot, eSBot, for the eSkolar 
                                platform, integrating FastAPI backend, ChromaDB vector database, and a LLaMA model hosted on Groq to 
                                provide personalized, up-to-date scholarship recommendations and real-time guidance to students.'
            ],
            [
                'project_name'=>'Bantala: APAC Solution Challenge 2025 Entry',
                'github'=>'Retrieval Augmented Generation: https://github.com/2BYYYY/team-ambot-bantala-rag Headless Web Scraper: https://github.com/2BYYYY/team-ambot-bantala-scraper',
                'tools'=>'GCP Services, Python, Docker, RAG, Selenium',
                'difficulty'=>'hard',
                'description'=>'Built a custom ETL pipeline for a RAG chatbot on volcanic activity. Scraped daily activity data from the 
                                DOST-PHIVOLCS website using Selenium with Headless Chrome, used Docker for containerization, and 
                                executed via Google Cloud Run Jobs. Scheduled the Job using Google Cloud Scheduler (cron job at 12:00 
                                PM daily). Transformed scraped data using Pandas, data cleaning and chunking for embedding compatibility, 
                                then using Vertex AI to generate vector embeddings. Loaded embedded data into BigQuery. Used Google 
                                Cloud Run Function to receive HTTP requests from the chatbot to execute the RAG workflow, querying 
                                relevant context and generating responses with Gemini API. '
            ]
        ]);
    }
}
