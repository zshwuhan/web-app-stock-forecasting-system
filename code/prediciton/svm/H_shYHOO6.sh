which java
cd /Users/Wuyang/Desktop/machineL/java/
 java -classpath libsvm.jar svm_scale -l 0 -u 1 -s H_price_YHOO6ScaleP H_price_YHOO6 > H_price_YHOO6Scale
java -classpath libsvm.jar svm_train -s 3 -t 2 -c 1 -g 1  H_price_YHOO6Scale
java -classpath libsvm.jar svm_scale -r H_price_YHOO6ScaleP H_predict_YHOO6 > H_predict_YHOO6Scale
java -classpath libsvm.jar svm_predict H_predict_YHOO6Scale H_price_YHOO6Scale.model H_predictPrice_YHOO6