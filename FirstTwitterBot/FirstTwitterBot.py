import sys
import tweepy
from tweepy import api

__author__ = '@ManasKocharekar'


#KEYS
CUST_KEY = 'j6yXddhyCqCWFYYGUYqs3Pyhl'
CUST_SECRET = 'jl9a60dY9VNX8UPCJEAyhGcq5wVFUmXwfGiFVj9drzBcY2TnYw'
APP_KEY = '348995503-BbCiMNykdh1E0Nm0UW0ndM1YpZ02rpwjBSlikHUG'
APP_SECRET = 'YHDGl3ex6Nd7eeVRNlYgtMEcKeZf1n7efwrEOgBRkLHbu'
auth = tweepy.OAuthHandler(CUST_KEY, CUST_SECRET)
auth.set_access_token(APP_KEY, APP_SECRET)
access = tweepy.API(auth)

TweetThis = str(sys.argv[1])

if TweetThis.startswith("#"):
    TweetText = TweetThis[1:]
else:
    filename = open(TweetThis, 'r')
    TweetText = filename.read()
    filename.close()

print(TweetText)

if len(TweetText) <= 140:
    access.update_status(TweetText)
    print('Tweeted Successfully')
else:
    print('Tweet Length Exceeded')
